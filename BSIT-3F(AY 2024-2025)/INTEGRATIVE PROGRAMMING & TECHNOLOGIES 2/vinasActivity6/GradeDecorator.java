public abstract class GradeDecorator implements Grade {
    protected Grade decoratedGrade;

    public GradeDecorator(Grade decoratedGrade){
        this.decoratedGrade = decoratedGrade;
    }

    public abstract void compute();
    
}
