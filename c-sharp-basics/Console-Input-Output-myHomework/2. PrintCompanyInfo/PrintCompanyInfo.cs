using System;

class Program
{
    static void Main()
    {
        Console.WriteLine("Company information");
        Console.Write("Name: ");
        string name = Console.ReadLine();
        Console.Write("Address: ");
        string address = Console.ReadLine();
        Console.Write("Phone number: ");
        string phone = Console.ReadLine();
        Console.Write("Fax number: ");
        string fax = Console.ReadLine();
        Console.Write("Web site: ");
        string site = Console.ReadLine();

        Console.WriteLine();
        Console.WriteLine("Manager information");
        Console.Write("First name: ");
        string firstName = Console.ReadLine();
        Console.Write("Last name: ");
        string lastName = Console.ReadLine();
        Console.Write("Age: ");
        string age = Console.ReadLine();
        Console.Write("Phone number: ");
        string ceoNumber = Console.ReadLine();

        Console.WriteLine("Company information: \n{0} \n{1} \n{2} \n{3} \n{4} \n \nManager information \n{5} \n{6} \n{7} \n{8}" 
            , name, address, phone, fax, site, firstName, lastName, age, ceoNumber);
    }
}
