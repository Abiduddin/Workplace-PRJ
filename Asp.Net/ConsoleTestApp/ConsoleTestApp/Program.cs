using System;

namespace ConsoleTestApp
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
            int a, b;
            b = 5;
            a = 0 & --b;

            Console.WriteLine(String.Format("{0} {1}",a,b));

            Console.ReadKey();
        }
    }
}
