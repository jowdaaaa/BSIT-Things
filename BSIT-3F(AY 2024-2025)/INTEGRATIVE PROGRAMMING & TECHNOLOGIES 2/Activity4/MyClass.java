public class MyClass {
    public static void main(String[] args){
        ComputationFactory computationFactory = new ComputationFactory();

        Computation midtermgrade = computationFactory.getComputation("midterm", 98.00, 88.20, 92.50);
        Computation tentativegrade = computationFactory.getComputation("tentative", 96.50, 89.20, 95.70);

        double midterm = midtermgrade.computation();
        double tentative = tentativegrade.computation();

        Computation finals = computationFactory.getComputation("final", midterm, tentative, 0);
        finals.computation();
    }   
}
