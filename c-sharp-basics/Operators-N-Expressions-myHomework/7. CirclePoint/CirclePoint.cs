using System;

class CirclePoint
{
    static void Main()
    {
        //the while loop is just for easier check for program mistakes
        while (true)
        {
            Console.Write("Enter the coordinates of X: ");
            double x = double.Parse(Console.ReadLine());
            Console.Write("Enter the coordinates of Y: ");
            double y = double.Parse(Console.ReadLine());

            double c = Math.PI * 2 * 2;
            double circle = (x * x) + (y * y);
            bool inCircle = Math.Sqrt(circle) <= 2;
            Console.WriteLine("The coordinates of X and Y are in the circle: " + inCircle);
        }
    }
}
