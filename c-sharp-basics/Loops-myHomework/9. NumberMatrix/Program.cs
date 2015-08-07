using System;

class Program
{
    static void Main()
    {
        Console.Write("Enter an integer [1;20]: ");
        int n = int.Parse(Console.ReadLine());

        if (1 <= n && n <= 20)
        {
            for (int row = 1; row <= n; row++)
            {
                Console.Write(row);
                for (int col = row + 1; col <= n + row; col++)
                {
                    Console.Write(" " + col);
                }
                Console.WriteLine();
            }
        }
        else
        {
            Console.WriteLine("Enter a corect number: ");
            n = int.Parse(Console.ReadLine());
            for (int row = 1; row <= n; row++)
            {
                Console.Write(row);
                for (int col = row + 1; col <= n + row; col++)
                {
                    Console.Write(" " + col);
                }
                Console.WriteLine();
            }
        }

    }
}
