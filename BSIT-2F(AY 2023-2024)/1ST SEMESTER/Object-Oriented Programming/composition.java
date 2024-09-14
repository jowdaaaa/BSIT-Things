class Engine {
    private String type;

    public Engine(String type) {
        this.type=type;
    }

    public String getEngineType() {
        return type;
    }
}

class Car {
    private String model;
    private Engine engine; // Composition

    public Car(String model, String engineType) {
        this.model=model;
        this.engine=new Engine(engineType);
        // Composition - creating Engine object within Car
    }

    public String getCarDetails() {
        return "Model: "+model+"\nEngine Type: "+engine.getEngineType();
    }
}

public class composition {
    public static void main(String[] args) {
        Car myCar=new Car("SUV", "V8");

        System.out.println(myCar.getCarDetails());
    }
}