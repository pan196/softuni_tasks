using System;
using System.Linq;

class CatalanNumber
{
    static void Main()
    {
        Console.WriteLine("Enter an integers: ");
        int n = int.Parse(Console.ReadLine());

        if (Enumerable.Range(1, 100).Contains(n))
        {

        }
        //1 < n < 100

        double factN = 1;
        double fact2N = 1;
        double factNPlus = 1;
        double rezult = 1;

        for (int i = 1; i <= n * 2; i++)
        {
            if (i <= 2 * n)
            {
                fact2N *= i;
            }
            if (i <= n)
            {
                factN *= i;
            }
            if (i <= n + 1)
            {
                factNPlus *= i;
            }
        }
        rezult = fact2N / (factNPlus * factN);
        Console.WriteLine("{0}", rezult);
    }
}
