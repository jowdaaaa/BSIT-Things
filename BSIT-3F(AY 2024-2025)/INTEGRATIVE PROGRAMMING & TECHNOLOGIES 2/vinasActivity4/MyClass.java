public class MyClass{
    public static void main(String[] args){
        ComputationFactory computationFactory = new ComputationFactory();

        Computation midtermgrade = computationFactory.getComputation("midterm", 95.50, 89.89, 98.10);
        Computation tentativegrade = computationFactory.getComputation("tentative", 96.40, 97.90, 99.10);

        midtermgrade.midterm();
        tentativegrade.tentative();
    }
}