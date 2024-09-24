public class Midterm implements Computation{
    private double x, y, z;
    public Midterm (double x, double y, double z){
        this.x = x;
        this.y = y;
        this.z = z;
    }

    @Override
    public double computation(){
        double mid = (x*0.4)+(y*0.3)+(z*0.3);
        System.out.println("MIDTERM GRADE: " + mid);

        return mid;
    }
}