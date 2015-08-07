using System;

class BitsExchange
{
    static void Main()
    { 
        uint num = uint.Parse(Console.ReadLine());
        
        uint result = num;
        uint mask1 = 7 << 3;
        uint mask2 = 7 << 24;

        // take bits 3, 4, 5 and 24, 25, 26
        uint bits345 = num & mask1;
        uint bits2456 = num & mask2;

        // put bits in position
        bits345 <<= 21;
        bits2456 >>= 21;

        //place zeroes in bits 3, 4, 5 and 24, 25, 26
        result = ~mask1 & result;
        result = ~mask2 & result

        // place bits in position
        result |= bits345;
        result |= bits2456;

        // output
        Console.WriteLine(result);
    }
}

