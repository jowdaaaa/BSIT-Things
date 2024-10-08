public class RemarkGradeDecorator extends GradeDecorator {
    public RemarkGradeDecorator(Grade decoratedGrade) {
        super(decoratedGrade);
    }

    @Override
    public void compute() {
        decoratedGrade.compute();
    }
}
