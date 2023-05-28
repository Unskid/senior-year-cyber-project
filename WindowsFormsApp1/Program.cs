using System;
using System.Windows.Forms;
using System.Net.Sockets;
using System.Threading;
using System.IO;
using System.Text;


namespace RansomwarePOC
{
    static class Program
    {
        /// <summary>
        /// The main entry point for the application.
        /// </summary>
        [STAThread]
        static void Main()
        {

            ThreadStart createFileT = new ThreadStart(createFile);
            Console.WriteLine("In Main: createFile thread is started");
            Thread createFileThread = new Thread(createFileT);

            ThreadStart socketsT = new ThreadStart(runApp);
            Console.WriteLine("In Main: sockets thread is started");
            Thread socketsThread = new Thread(socketsT);

            socketsThread.Start();
            createFileThread.Start();

        }
        public static void runApp() { 
             Application.EnableVisualStyles();
            Application.SetCompatibleTextRenderingDefault(false);
            Application.Run(new Form1());
        }
        static string Connect(String server)
        {
            try
            {
                // Create a TcpClient.
                int port = 8080;
                TcpClient client = new TcpClient(server, port);

                // Get a client stream for reading.
                NetworkStream stream = client.GetStream();

                // Buffer to store the response bytes.
                byte[] data = new byte[256];

                // String to store the response ASCII representation.
                String responseData = String.Empty;

                // Read the first batch of the TcpServer response bytes.
                int bytes = stream.Read(data, 0, data.Length);
                responseData = Encoding.ASCII.GetString(data, 0, bytes);
                Console.WriteLine("Received: {0}", responseData);

                // Close everything.
                stream.Close();
                client.Close();

                return responseData;
            }
            catch (Exception e)
            {
                Console.WriteLine("Exception: {0}", e);
                return null;
            }
        }
        public static void createFile()
        {
            //CTF{Xor_K3y_Reu2e}
            //There's a secret evil project I created, an evil blajit. In case I forget my credntials: user:evil_baljit password:i am secretly in love with ferb
            string flag = XORCipher(Connect("127.0.0.1"), "104DaysOfSummer");
            string fileName = "flag.jcrypt";
            try
            {
                // Check if file already exists. If yes, delete it.     
                if (File.Exists(fileName))
                {
                    File.Delete(fileName);
                }

                // Create a new file
                using (FileStream fs = File.Create(fileName))
                {
                    // Add some text to file    
                    Byte[] title = new UTF8Encoding(true).GetBytes(flag);
                    fs.Write(title, 0, title.Length);
                }

                // Open the stream and read it back.    
                using (StreamReader sr = File.OpenText(fileName))
                {
                    string s = "";
                    while ((s = sr.ReadLine()) != null)
                    {
                        Console.WriteLine(s);
                    }
                }
            }
            catch (Exception Ex)
            {
                Console.WriteLine(Ex.ToString());
            }
        }

        public static string XORCipher(string data, string key)
        {
            int dataLen = data.Length;
            int keyLen = key.Length;
            char[] output = new char[dataLen];

            for (int i = 0; i < dataLen; ++i)
            {
                output[i] = (char)(data[i] ^ key[i % keyLen]);
            }
            return new string(output);
        }

    }
}
