using System;

class IntegersSum
{
    static void Main()
    {
        Console.WriteLine("Enter three numbers: ");
        Console.Write("1. "); int one = int.Parse(Console.ReadLine());
        Console.Write("2. "); int two = int.Parse(Console.ReadLine());
        Console.Write("3. "); int three = int.Parse(Console.ReadLine());

        int sum = one + two + three;
        Console.WriteLine("Sum of the numbers is: " + sum);
    }
}
