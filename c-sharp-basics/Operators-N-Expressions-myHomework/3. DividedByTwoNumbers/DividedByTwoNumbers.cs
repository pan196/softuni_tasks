using System;

class DividedByTwoNumbers
{
    static void Main()
    {
        //the while loop is just for easier check for program mistakes
        while (true)
        {
            Console.WriteLine("Enter a number that can be devided by 7 and 5 in the same time: ");
            int number = int.Parse(Console.ReadLine());

            bool canDevided = (number % 7 == 0 && number % 5 == 0);
            Console.WriteLine("This number can be devided by 7 and 5 in the same time: " + canDevided);
        } 
    }
}
