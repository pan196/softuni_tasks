using System;

class AgeAfterYears
{
    static void Main()
    {
        DateTime birthDay; // Declaring variable 'birthDay' of type 'DateTime'
        DateTime.TryParse(Console.ReadLine(), out birthDay); // Getting birthdate and initializing it to 'birthDay'
        DateTime today = DateTime.Today; // Getting the current date
        int age = today.Year - birthDay.Year; //Getting the age
        if (birthDay > today.AddYears(-age)) age--; // Checking for accuracy of the age
        Console.WriteLine(age); // Displaying the current age
        Console.WriteLine(age + 10); // Displaying the age after 10 years
    }
}
