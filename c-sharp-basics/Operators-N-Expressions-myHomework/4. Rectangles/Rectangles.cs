using System;

class Rectangles
{
    static void Main()
    {
        Console.Write("Enter side A of a rectangle: ");
        int numberOne = int.Parse(Console.ReadLine());
        Console.Write("Enter side B of a rectangle: ");        
        int numberTwo = int.Parse(Console.ReadLine());

        int perimeter = (numberOne * 2) + (numberTwo * 2);
        int area = numberOne * numberTwo;
        Console.WriteLine("The perimeter of the rectangle is " + perimeter);
        Console.WriteLine("The area of the rectangle is " + area);
    }
}

