public class Midterm implements Computation {
    private double x, y, z;
    public Midterm (double x, double y, double z){
        this.x = x;
        this.y = y;
        this.z = z;
    }

    @Override
    public void midterm(){
        double result = ((x*.40) + (y*.30) + (z*.30));
        System.out.println("MIDTERM GRADE: " + result);
    }
}