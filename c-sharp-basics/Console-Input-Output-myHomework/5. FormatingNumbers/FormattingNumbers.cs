using System;

    class FormattingNumbers
    {
        static void Main()
        {
            Console.Write("Enter an integer number: ");
            int a = int.Parse(Console.ReadLine());
            while (a < 0 || a > 500) 
            {
                Console.WriteLine("Invalid input! Try again!");
                Console.Write("Enter an integer number: ");
                a = int.Parse(Console.ReadLine());
            }
            Console.Write("Enter a number with floating point: ");
            double b =  double.Parse(Console.ReadLine());
            Console.Write("Enter another number with floating point: ");
            double c = double.Parse(Console.ReadLine());

            Console.Write("|{0, 10:X} |", a);
            Console.Write(Convert.ToString(a, 2).PadLeft(10,'0'));
            Console.WriteLine("| {0, 10:#.##} | {1, 10:#.###} |", b, c);
        }
    }
