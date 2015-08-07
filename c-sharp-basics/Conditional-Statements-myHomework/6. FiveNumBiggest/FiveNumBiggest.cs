using System;

class FiveNumBiggest
{
    static void Main()
    {
        Console.WriteLine("Enter five numbers: ");
        double first = double.Parse(Console.ReadLine());
        double second = double.Parse(Console.ReadLine());
        double third = double.Parse(Console.ReadLine());
        double fourth = double.Parse(Console.ReadLine());
        double fifth = double.Parse(Console.ReadLine());

        bool oneIsBiggest = first > second && first > third && first > fourth && first > fifth;
        bool twoIsBiggest = second > first && second > third && second > fourth && second > fifth;
        bool threeIsBiggest = third > first && third > second && third > fourth && third > fifth;
        bool fourIsBiggest = fourth > first && fourth > second && fourth > third && fourth > fifth;
        bool fiveIsBiggest = fifth > first && fifth > second && fifth > third && fifth > fourth;
        if (oneIsBiggest)
        {
            Console.WriteLine("The biggest number is: " + first);
        }
        else if (twoIsBiggest)
        {
            Console.WriteLine("The biggest number is: " + second);
        }
        else if (threeIsBiggest)
        {
            Console.WriteLine("The biggest number is: " + third);
        }
        else if (fourIsBiggest)
        {
            Console.WriteLine("The biggest number is: " + fourth);
        }
        else if (fiveIsBiggest)
        {
            Console.WriteLine("The biggest number is: " + fifth);
        }
    }
}

