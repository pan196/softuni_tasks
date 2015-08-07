using System;

class EmployeeData
{
    static void Main()
    {
        string firstName = "Еди";
        string lastName = "Койси";
        byte age = 28;
        char gender = (char)109;
        long personalID = 8306112507;
        uint uniqueNumber = 27560000;

        Console.WriteLine(firstName);
        Console.WriteLine(lastName);       
        Console.WriteLine("Age: " + age);
        Console.WriteLine("Gender: " + gender);
        Console.WriteLine("Personal ID number: " + personalID);
        Console.WriteLine("Unique employee number: " + uniqueNumber);    
    }
}
