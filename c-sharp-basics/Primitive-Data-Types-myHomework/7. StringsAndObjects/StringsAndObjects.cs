using System;

class StringsAndObjects
{
    static void Main()
    {
        string one = "Hello";
        string two = "World";
        object combined = one + " " + two;
        string result = (string)combined;
        Console.WriteLine(result);
    }
}
