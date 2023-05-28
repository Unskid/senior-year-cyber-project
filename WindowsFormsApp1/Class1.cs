using System;

public class Class1
{
	public Class1()
	{
 
        void Main() {
            Console.WriteLine("Hello world");
            XORCipher("rdr?9\x0016\x0001\x0010-`\f2? \a\x0003UI", "104DaysOfSummer");
        }
        string XORCipher(string data, string key)
        {
            int length = data.Length;
            int num2 = key.Length;
            char[] chArray = new char[length];
            for (int i = 0; i < length; i++)
            {
                chArray[i] = (char)(data[i] ^ key[i % num2]);
            }
            return new string(chArray);
        }
    }
}
