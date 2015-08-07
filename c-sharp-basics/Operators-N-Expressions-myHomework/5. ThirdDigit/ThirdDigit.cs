using System;

class ThirdDigit
{
    static void Main()
    {
        //the while loop is just for easier check for program mistakes
        while (true)
        {
            Console.WriteLine("Enter a number and see if its third digit from right-to-left is 7: ");
            int number = int.Parse(Console.ReadLine());

            int devHundred = number / 100;
            bool isSeven = devHundred % 10 == 7;

            Console.WriteLine("The result is: " + isSeven);
        }
    }
}
