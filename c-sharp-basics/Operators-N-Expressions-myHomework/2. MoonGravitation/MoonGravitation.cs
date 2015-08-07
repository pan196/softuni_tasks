using System;

class MoonGravitation
{
    static void Main()
    {
        Console.WriteLine("Enter your weight on Earth: ");
        double weight = double.Parse(Console.ReadLine());

        double moonWeight = (weight * 17) / 100;
        Console.WriteLine("Your weight on the Moon is: " + moonWeight);
    }
}
