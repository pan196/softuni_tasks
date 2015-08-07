using System;

class ExtractBitFromInteger
{
    static void Main()
    {
        //the while loop is just for easier check for program mistakes
        while (true)
        {
            Console.Write("Enter a number: ");
            int num = int.Parse(Console.ReadLine());

            Console.Write("Enter a place of the bit you want to be extracty: ");
            int place = int.Parse(Console.ReadLine());

            int extract = num >> place;
            int bit = extract & 1;
            Console.WriteLine("The bit on position {0} of the number is {1}", place, bit);
        }
    }
}
