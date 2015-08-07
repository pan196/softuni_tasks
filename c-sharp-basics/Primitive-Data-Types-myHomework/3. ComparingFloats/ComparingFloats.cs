using System;

class ComparingFloats
{
    static void Main()
    {
        while (true)
        {
            Console.WriteLine("Enter number X: ");
            double numberOne = double.Parse(Console.ReadLine());
            Console.WriteLine("Enter number Y: ");
            double numberTwo = double.Parse(Console.ReadLine());

            bool isEqual = Math.Abs(numberOne - numberTwo) < 0.000001;
            Console.WriteLine("Number X and number Y are equal: " + isEqual);
        }
    }
}
