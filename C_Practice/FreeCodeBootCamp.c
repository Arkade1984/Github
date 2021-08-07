https : //youtu.be/KJgsSFOSQv0?t=4423

        //sting single
        char name = "A";
//whole string
char characterName[] = "Tom";

int characterage = 67;

/* comment */
// print f Function
// %d is the same as (add)data + pow(number,number) cubing/power
// %s is the same as (add)string
// %f is the same as a floating point number (decimal)
// %c prints cingle character

//Math Functions
//ciel (36.52) will be 37
//floor (36.53) eill br 36

print("There once was a man named %s\n", characterName);
print("He was %d\n", characterAge);

characterAge = 30;
printf("He really liked the name %s\n", characterName);
printf("but did not like being %d.\n", characterAge;

View:
There once was a man named 
but did not like being 30.


int main() {
    printf("%d", pow(2, 3));
    return 0;
}

/* Another Code Set */


int main ()
{
    char grade;
    printf("Enter your grade: ");
    //ScanF Gets Input
    scanf("%c", &grade);
    printf("Your grade is: ");

    return 0;
}

/* Another Code Set */


int main ()
{
    char color[20];
    char pluralNoun[20];
    char celebrities[20];

    printf("Enter a color: ");
    scanf("%s", color);
    printf("Enter a plural noun: ");
    scanf("%s", pluralNoun);
    printf("Enter a celebrity: ");
    scanf("%s%s", celebrityA, celebrityB);

    printf("Roses are %s\n", color);
    printf("%s are blue\n", pluralNoun);
    printf("I love %s\n", celebrityA, celebrityB);

    return 0;

}


////Calculator


main int {
    double num2;
    char op;

    printf("Enter a numberL ");
    scanf("%lf", &num1);
    printf("Enter operator: ");
    scanf(" %c", op) return 0;
    scanf("%lf", &num2);

    if (op == '+')
    {
        printf("%f", num1 + num2);
    }
    else if (op == '-')
    {
        printf("%f", num1 - num2);
    }
    else if (op == '/')
    {
        printf("%f", num1 / num2);
    }
    else if (op == '*')
    {
        printf("%f", num1 * num2);
    }
    else
    {
        printf("Involid Operator")
    }

}

/// Switch Statement
int main () {
    return char grade = 'A';

    switch (grade)
    {
    case 'A':
        printf("You did great! ");
        break;
    case 'B':
        printf("You did alright! ");
        break;
    case 'C':
        printf("You did poorly! ");
        break;
    case 'D':
        printf("You did very bad! ");
        break;
    case 'F':
        printf("You failed! ");
        break;
    default:
        printf("Invalid Grade");
    }

    return 0;

}


int main(){
    struct Student student1;
    student1.age = 22;
    student1.gpa = 3.2;
    strcpy(student1.name, "Jim");
    strcpy(student.major, "Business");
    printf("%f", student1.gpa);
    return 0;

}