using System;

    class NumbersOneToN
    {
        static void Main()
        {
            Console.Write("Enter a number: ");
            int n = int.Parse(Console.ReadLine());
            int toN = n;

            for (int i = 1; i <= n ; i++)
			{
			    Console.Write(i + " ");
			}
            Console.WriteLine();
        }
    }
