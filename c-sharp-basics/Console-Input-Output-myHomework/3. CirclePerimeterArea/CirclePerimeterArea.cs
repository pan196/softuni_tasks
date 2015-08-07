using System;

class CirclePerimeterArea
{
    static void Main()
    {
        Console.Write("Enter a radius of some circle: ");
        double r = double.Parse(Console.ReadLine());

        double perimeter = 2 * 3.14159 * r;
        double area = 3.14 * (r * r);

        Console.WriteLine("The perimeter of circle with this radius is {0:0.00}. \nThe area of the same circle is {1:0.00}", perimeter, area);
    }
}
