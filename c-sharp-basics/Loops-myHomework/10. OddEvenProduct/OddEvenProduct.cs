using System;

class OddEvenProduct
{
    static void Main()
    {
        Console.WriteLine("Enter integers separated with space: ");
        string integers = Console.ReadLine();
        string[] numbers = integers.Split(new char[] {' '}, StringSplitOptions.RemoveEmptyEntries);

        int even = 1;
        int odd = 1;             


        for (int i = 0; i < numbers.Length; i++)
        {
            int number = int.Parse(numbers[i]);

            if (i % 2 == 0)
            {
                even *= number;
            }
            else
            {
                odd *= number;
            }
        }

        if (even == odd)
        {
            Console.WriteLine("yes \nproduct = " + even);
        }
        else
        {
            Console.WriteLine("no \nodd product = {0} \neven product = {1}", odd, even);
        }
    }
}