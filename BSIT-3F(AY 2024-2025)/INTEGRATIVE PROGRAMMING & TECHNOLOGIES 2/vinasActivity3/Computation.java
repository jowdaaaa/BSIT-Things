public class Computation {
    private Computation() {}
    private static Computation instance;

    public static Computation getInstance() {
        if(instance == null) {
            instance = new Computation();
        }  
        return instance;
    }

    public double computation(double a, double b, double c, double d) {
        return (a + b + c + d) / 4;
    }
}