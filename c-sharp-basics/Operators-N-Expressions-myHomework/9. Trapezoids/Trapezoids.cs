using System;

class Trapezoids
{
    static void Main()
    {
        Console.Write("Enter side \"a\" of the trapezoid: ");
        double a = double.Parse(Console.ReadLine());
        Console.Write("Enter side \"b\" of the trapezoid: ");
        double b = double.Parse(Console.ReadLine());
        Console.Write("Enter height of the trapezoid: ");
        double h = double.Parse(Console.ReadLine());

        double area = ((a + b) / 2) * h;

        Console.WriteLine("The area of the trapezoid is: " + area);
    }
}
