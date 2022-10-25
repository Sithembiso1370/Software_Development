import java.util.Scanner;

class StackNode {
public StackNode(double data, StackNode underneath) {
this.data = data;
this.underneath = underneath;
}

public StackNode underneath;
public double data;
}


class RPN {
public void into(double new_data) {
StackNode new_node = new StackNode(new_data, top);
top = new_node;
}

public double outof( ) {
double top_data = top.data;
top = top.underneath;
return top_data;
}

public RPN(String command) {
top = null;
this.command = command;
}

public double get( ) {
double a, b;
int j;

for(int i = 0; i < command.length( ); i++) {
// if it's a digit
if(Character.isDigit(command.charAt(i))) {
double number;

// get a string of the number
String temp = "";
for(j = 0; (j < 100) && (Character.isDigit(command.charAt(i)) || (command.charAt(i) == '.')); j++, i++) {
temp = temp + String.valueOf(command.charAt(i));
}

// convert to double and add to the stack
number = Double.parseDouble(temp);
into(number);
} else if(command.charAt(i) == '+') {
b = outof( );
a = outof( );
into(a + b);
} else if(command.charAt(i) == '-') {
b = outof( );
a = outof( );
into(a - b);
} else if(command.charAt(i) == '*') {
b = outof( );
a = outof( );
into(a * b);
} else if(command.charAt(i) == '/') {
b = outof( );
a = outof( );
into(a / b);
}
else if(command.charAt(i) == '^') {
b = outof( );
a = outof( );
into(Math.pow(a, b));
} else if(command.charAt(i) != ' ') {
throw new IllegalArgumentException( );
}
}

double val = outof( );

if(top != null) {
throw new IllegalArgumentException( );
}

return val;
}

private String command;
private StackNode top;

/* main method */
public static void main(String args[]) {
while(true) {
Scanner in = new Scanner(System.in);
System.out.println("Enter RPN expression or \"quit\".");
String line = in.nextLine( );
if(line.equals("quit")) {
break;
} else {
RPN calc = new RPN(line);
System.out.printf("Answer is %f\n", calc.get( ));
}
} 
}
}