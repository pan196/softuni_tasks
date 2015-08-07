using System;

class ExtractBit
{
    static void Main()
    {
        //the while loop is just for easier check for program mistakes
        while (true)
        {
            Console.WriteLine("Enter a number: ");
            int num = int.Parse(Console.ReadLine());

            int place = num >> 3;
            int bit = place & 1;
            Console.WriteLine("The bit on position three of your number is " + bit);
        }
    }
}
