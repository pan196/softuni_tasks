using System;
using System.Text;

class IsoscelesTriangle
{
    static void Main()
    {
        Console.OutputEncoding = Encoding.UTF8;
        //char copyOne = (char)169;
        char c = '\u00A9';
        char s = ' ';
        //Console.WriteLine(copyOne);
        Console.WriteLine("{0}{1}{2}{3}", s, s, s, c);
        Console.WriteLine("{0}{1}{2}{3}{4}", s, s, c, s, c);
        Console.WriteLine("{0}{1}{2}{3}{4}{5}", s, c, s, s, s, c);
        Console.WriteLine("{0}{1}{2}{3}{4}{5}{6}", c, s, c, s, c, s, c);
    }
}

