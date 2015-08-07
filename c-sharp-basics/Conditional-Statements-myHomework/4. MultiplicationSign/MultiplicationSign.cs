using System;

class MultiplicationSign
{
    static void Main()
    {
            int first = int.Parse(Console.ReadLine());
            int second = int.Parse(Console.ReadLine());
            int third = int.Parse(Console.ReadLine());

            if (first + second + third > 0)
            {
                Console.WriteLine('+');
            }
            else if (first + second + third == 0)
            {
                Console.WriteLine('0');
            }
            else if (first + second + third < 0)
            {
                Console.WriteLine('-');
            }
    }
}

