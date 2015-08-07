using System;

class PrimeNumberCheck
{
    static void Main()
    {
        //the while loop is just for easier check for program mistakes
        while (true)
        {
            Console.WriteLine("Enter a prime number: ");
            int numPrime = int.Parse(Console.ReadLine());

            bool isPrime = numPrime > 1 && numPrime % 2 != 0 && numPrime % 3 != 0
                && numPrime % 5 != 0 && numPrime % 7 != 0 && numPrime <= 100
                || numPrime == 2 || numPrime == 3 || numPrime == 5 || numPrime == 7;

            Console.WriteLine("The number is prime: " + isPrime);
        }
    }
            
}