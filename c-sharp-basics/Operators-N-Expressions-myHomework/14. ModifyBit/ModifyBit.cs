using System;
    
class ModifyBit
{
    static void Main()
    {
        //the while loop is just for easier check for program mistakes
        while (true)
        {
            Console.Write("Enter a number: ");
            int num = int.Parse(Console.ReadLine());

            Console.Write("Position to change: ");
            int place = int.Parse(Console.ReadLine());

            Console.Write("The ne bit value will be 0 or 1: ");
            int bitValue = int.Parse(Console.ReadLine());

            int oldNumber = num;
            int mask = 1 << place; 
            int oldBit = (num & mask) >> place; 
            if (bitValue == 1)
            {
  
                num = num | mask;
            }
            else if (bitValue == 0)
            {
                mask = ~mask;
                num = num & mask;
            }
            Console.WriteLine("The old bit value is " + oldBit);
            Console.WriteLine("The new bit value is " + bitValue);
            Console.WriteLine("The new number is " + num);
        }
     }
}
