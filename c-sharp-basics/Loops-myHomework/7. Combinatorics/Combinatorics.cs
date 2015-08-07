using System;
using System.Linq;

class CombinatoricsFactorials
{
    static void Main()
    {
        Console.WriteLine("Enter a two integers: ");
        int n = int.Parse(Console.ReadLine());
        int k = int.Parse(Console.ReadLine());

        if (Enumerable.Range(1, n).Contains(k))
        {

        }
        else if (Enumerable.Range(k, 100).Contains(n))
        {

        }
        //1 < k < n < 100

        double factN = 1;
        double factK = 1;
        double rezult = 1;
        double factMinus = 1;

        for (int i = 1; i <= n; i++)
        {
            if (i <= n - k)
            {
                factMinus *= i;
            }
            if (i <= k)
            {
                factK *= i;
            }
            if (i <= n)
            {
                factN *= i;
            }            
        }
        rezult = factN / (factK * factMinus);
        Console.WriteLine("{0}", rezult);
    }
}
