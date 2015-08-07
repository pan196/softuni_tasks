using System;

class NumberComparer
{
    static void Main()
    {
        Console.Write("Enter a number: ");
        double firstNumber = double.Parse(Console.ReadLine());
        Console.Write("Enter another number: ");
        double secondNumber = double.Parse(Console.ReadLine());

        double comparer = (Math.Sqrt(firstNumber * firstNumber + secondNumber * secondNumber - 2 * firstNumber * secondNumber)
            + firstNumber + secondNumber) / 2;

        Console.WriteLine("The biger number is: " + comparer);
    }
}
