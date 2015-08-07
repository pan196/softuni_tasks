using System;

class PlayWithIntString
{
    static void Main()
    {
        
        Console.WriteLine("1. --> int \n2. --> double \n3. --> string");
        Console.Write("Place choose a type: ");
        byte type = byte.Parse(Console.ReadLine());

        if (type == 1)
        {
            Console.WriteLine("Place enter a int: ");
            int oneChoosen = int.Parse(Console.ReadLine());

            Console.WriteLine(oneChoosen + 1);
        }
        else if (type == 2)
        {
            Console.WriteLine("Place enter a double: ");
            int twoChoosen = int.Parse(Console.ReadLine());

            Console.WriteLine(twoChoosen + 1);
        }
        else if (type == 3)
        {
            Console.WriteLine("Place enter a string: ");
            string threeChoosen = Console.ReadLine();

            Console.WriteLine(threeChoosen + "*");
        }
        else
        {
            Console.WriteLine("Place choose a digit from 1 to 3: ");
        }
    }
}
