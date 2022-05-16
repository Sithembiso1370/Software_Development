#include <iostream>
#include <cmath>
// for math operations include the module above


using namespace std;

int main()
{
    char gender = 'M';
    // Data Types Strings,
    string characterName = "Sithembiso Maphanga";
    // integer data types contain integers
    int intAge;
    // set the new value for the variable
    intAge = 27;
    // double data type
    double gpa = 2.3;
    // bootean data type : true/false
    bool isMale = true;

    // numbers
    int num1 = 1;
    int num2 = 2;

    // Arrays
    int firstArray[] = {1,2,3,4,5,6,7,8,9,10};





    // c++ output
    cout << "The was a man called "<< characterName << endl;
    cout << "He was "<< intAge << " old" << endl;
    cout << "random doube data type : "<< gpa << endl;
    cout << "is Male " << isMale << endl;
    cout << "Substring " << characterName.substr(0,5) << endl;
    cout << "find mbi " << characterName.find("mbi",3) <<endl;
    cout << "Multiplication num1*num2 : "<< num1*num2 << endl;
    cout << "pre increment ++num1 : "<< ++num1 << endl;
    cout << "post increment num1++ : "<< num1++ << endl;
    cout << "adding integer and double num1+gpa : "<< num1+gpa << endl;
    // Operations between types of the same always return the same type
    cout << "deviding with remainder 10/3 neglects the remainder and return an integer : "<< 10/3 << endl;
    cout << "deviding with remainder 10/3.0 does not neglect the remainder 0.33 and returns a double with decimals : "<< 10/3.0 << endl;
    cout << "Print array elements firstArray[3] : "<< firstArray[3] << endl;
    cout << "Print array elements firstArray[2,3] : "<< firstArray[2,9] << endl;
    cout << "Change array elements firstArray[3] + 1 : "<< firstArray[2,9] << endl;
    firstArray[3] = firstArray[3]  +1;
    cout << "Print array elements firstArray[3] Changed : "<< firstArray[3] << endl;
    cout << " Print math function power of gpa = pow(gpa, num1) " << pow(gpa,num1) << endl;

    // c++ inputs
    // number inputs double and int use cin to get data from the input stream
    //declaire age variable
    double age;
    cout << "Ente your age : ";
    cin >> age;



    // string inputs take user input using the getline
    // create an empty string variables
    string name;
    // Prompt the user to enter a value
    cout << "Enter your name : "<< endl;
    // get the most resent value supplied to the standard input device
    // tell the machine that the variable being entered should be set to the value provided 'name'
    getline(cin,name);

    //display the input
    cout <<"Hi "<< name << " You are " << age << " years old"<< endl;


    // Declaire multiple variable in one line
    int num11,num22;

    cout << "Enter your 11 number : ";
    cin >> num11;
    cout << "Enter your 22 number : "<< endl;
    cin >> num22;
    cout << "The sum of num11 and num22 is "<< num11+num22<< endl;

    // Mad libs game
    //variables for madlibs
    string color, pluralNoun,celebrity;

    // prompt for color input
    cout << "Enter color : ";
    cin >> color;

    // prompt for pluralNoun input
    cout << "Enter pluralNoun : ";
    cin >> pluralNoun;

    // prompt for celebrity input
    cout << "Enter celebrity : ";
    cin >> celebrity;

    //display for madlibs
    cout << "Roses are " << color << endl;
    cout << "Violets and " << pluralNoun << endl;
    cout << "I love " << celebrity << endl;


    return 0;
}
