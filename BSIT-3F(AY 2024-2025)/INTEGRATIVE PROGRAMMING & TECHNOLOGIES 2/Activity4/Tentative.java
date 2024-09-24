public class Tentative implements Computation{
    private double x, y, z;
    public Tentative (double x, double y, double z){
        this.x = x;
        this.y = y;
        this.z = z;
    }

    @Override
    public double computation(){
        double ten = (x*0.4)+(y*0.3)+(z*0.3);
        System.out.println("TENTATIVE GRADE: " + ten);

        return ten;
    }
}