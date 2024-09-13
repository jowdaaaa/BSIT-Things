import java.util.Scanner;
public class vinasAct1 {
    public static void main (String[] args){
        Scanner input = new Scanner(System.in);
        
        int[] getNum = new int[6];
        System.out.println("Enter the 6 numbers of the arithmetic sequence:");
        for(int i=0; i<6; i++){
            getNum[i]=input.nextInt();
        }
        
        int getArithSeq = getNum[1]-getNum[0];
        
        boolean checker = true;
        for(int i=1; i<5; i++){
            if((getNum[i+1]-getNum[i])!=getArithSeq){
                checker = false;
                break;
            }
        }
        
        if(checker){
            System.out.println("The common difference in the arithmetic sequence is " + getArithSeq);
            System.out.print("Enter the series to find: ");
            int getSeries = input.nextInt();
            System.out.println("The " + getSeries + "th number in the series is " + (getArithSeq*getSeries));
        } else {
            System.out.println("The series is not an arithmetic sequence");
        }
        input.close();
    }
}