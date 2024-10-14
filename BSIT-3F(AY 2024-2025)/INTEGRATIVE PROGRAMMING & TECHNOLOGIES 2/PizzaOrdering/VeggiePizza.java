public class VeggiePizza implements Pizza {
    @Override
    public String getDescription() {
        return "Veggie pizza";
    }

    @Override
    public double cost() {
        return 10.0; // Base price of the Veggie pizza
    }
}