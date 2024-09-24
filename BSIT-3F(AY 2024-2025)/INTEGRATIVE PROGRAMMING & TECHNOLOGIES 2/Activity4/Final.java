public class Final implements Computation{
    private double x, y;
    public Final (double x, double y){
        this.x = x;
        this.y = y;
    }

    @Override
    public double computation(){
        double midterm = x * 0.5;
        double tentative = y * 0.5;
        double finals = midterm + tentative;
        System.out.println("FINAL GRADE: " + finals);

        return finals;
    }
}