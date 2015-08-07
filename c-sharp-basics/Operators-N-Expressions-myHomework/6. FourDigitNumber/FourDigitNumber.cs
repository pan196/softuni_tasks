using System;

class FourDigitNumber
{
    static void Main()
    {
        Console.Write("Enter a four-digit number: ");
        int fourNumber = int.Parse(Console.ReadLine());
       
        int a = fourNumber / 1000;
        int b = (fourNumber - (a * 1000)) / 100;
        int c = (fourNumber - ((a * 1000) + (b * 100))) / 10;
        int d = (fourNumber - ((a * 1000) + (b * 100) + (c * 10)));

        int fourSum = a + b + c + d;
        Console.WriteLine("The sum of the digits is: " + fourSum);
        Console.WriteLine("The number in reversed order: {0}{1}{2}{3}", d, c, b, a);
        Console.WriteLine("With last digit in the first position: {0}{1}{2}{3}", d, a, b, c);
        Console.WriteLine("With exchange second and third digits: {0}{1}{2}{3}", a, c, b, d);
    }
}
