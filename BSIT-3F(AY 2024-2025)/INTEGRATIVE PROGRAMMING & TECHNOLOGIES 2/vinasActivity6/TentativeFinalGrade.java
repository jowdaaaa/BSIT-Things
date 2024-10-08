public class TentativeFinalGrade implements Grade {
    protected double grade;

    @Override
    public void compute(){
        double grade = ((90*.40) + (92*.30) + (95*.30));
        System.out.println("Tentative Final Grade: " + grade);
        setRemark(grade);
    }

    private void setRemark(double grade){
        if(grade<75){
            System.out.println("Remarks: Failed");
        } else {
            System.out.println("Remarks: Passed");
        }
    } 
}
