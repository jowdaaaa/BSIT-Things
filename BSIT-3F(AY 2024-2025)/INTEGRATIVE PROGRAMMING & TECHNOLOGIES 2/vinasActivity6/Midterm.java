public class Midterm implements Grade {
    private void setRemark(double grade){
        if(grade<75){
            System.out.println("Remarks: Failed");
        } else {
            System.out.println("Remarks: Passed");
        }
    } 

    @Override
    public void compute(){
        double grade = ((90*.40) + (92*.30) + (95*.30));
        System.out.println("Midterm: " + grade);
        setRemark(grade);
    }

}
