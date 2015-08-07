using System;

class PointCircleRectangle
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

            double r = 1.5;
            bool isCiclePoint = (x - 1) * (x - 1) + (y - 1) * (y - 1) <= r * r;
            bool isntRectanglePoint = (x < -1 || x > 5) || (y < -1 || y > 1);
            if (isCiclePoint && isntRectanglePoint)
            {
                Console.WriteLine("Yes");
            }
            else
            {
                Console.WriteLine("No");
            }
        }
    }
}

