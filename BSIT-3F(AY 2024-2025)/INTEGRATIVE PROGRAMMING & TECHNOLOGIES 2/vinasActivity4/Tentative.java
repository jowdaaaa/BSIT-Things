public class Tentative implements Computation {
    private double x, y, z;
    public Tentative (double x, double y, double z){
        this.x = x;
        this.y = y;
        this.z = z;
    }

    @Override
    public void tentative(){
        double result = ((x*.40) + (y*.30) + (z*.30));
        System.out.println("TENTATIVE GRADE: " + result);
    }
}