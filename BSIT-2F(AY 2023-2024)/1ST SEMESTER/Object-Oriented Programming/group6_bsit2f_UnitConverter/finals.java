import java.util.Scanner;

public class finals {
	private static String[] fUnit = new String[100];
    private static String[] sUnit = new String[100];
    private static double[] answer = new double[100];
    private static int[] historyIndexArr = new int[100];
	
	public static void main (String[] args) {

        Scanner s = new Scanner(System.in);
		Area area = new Area();
		Length length = new Length();
		Temperature temp = new Temperature();
		Volume volume = new Volume();
		Mass mass = new Mass();
		ShowHistory showHistory = new ShowHistory();

		boolean l=true;
		
		while (l){
			System.out.println("===================================================================");
			System.out.println("==================== WELCOME TO UNIT CONVERTER ====================");
			System.out.println("===================================================================");
            System.out.println("|| Select a Unit :                                               ||");
            System.out.println("||                 [1] Area                                      ||");
            System.out.println("||                 [2] Length                                    ||");
            System.out.println("||                 [3] Temperature                               ||");
            System.out.println("||                 [4] Volume                                    ||");
            System.out.println("||                 [5] Mass                                      ||");
            System.out.println("||                 [6] Show history                              ||");
            System.out.println("||                 [0] Exit                                      ||");
            System.out.println("===================================================================");


			System.out.print("Input your choice [0-6]: ");
			int choice1 = s.nextInt();

			switch (choice1) {
				case 1 :
					area.a(fUnit, sUnit, answer, historyIndexArr);
					break;
					
				case 2 :
					length.l(fUnit, sUnit, answer, historyIndexArr);
					break;
					
				case 3 :
					temp.t(fUnit, sUnit, answer, historyIndexArr);
					break;
					
				case 4 :
					volume.v(fUnit, sUnit, answer, historyIndexArr);
					break;
					
				case 5 :
					mass.m(fUnit, sUnit, answer, historyIndexArr);
					break;

				case 6:
                    showHistory.show(fUnit, sUnit, answer, historyIndexArr);
                    break;
					
				case 0 :
					l=false;
					break;

				default: 
					System.out.println ("INVALID INPUT!");
					break;
			}
		}
		s.close();
		System.out.println("\n===================================================================");
		System.out.println("======================= T H A N K    Y O U  =======================");
		System.out.println("===================================================================");
    }
}

class ShowHistory {
    public void show(String[] fUnit, String[] sUnit, double[] answer, int[] historyIndexArr) {
        if (historyIndexArr[0] == 0) {
			System.out.println("\n===================================================================");
        	System.out.println("  NO CONVERSION HISTORY AVAILABLE!");
        	System.out.println("===================================================================\n");
            return;
        }

        Scanner s = new Scanner(System.in);
        boolean t = true;

        while (t) {
            System.out.println("===================================================================");
            System.out.println("  CONVERSION HISTORY ");
            for (int i = 0; i < historyIndexArr[0]; i++) {
                System.out.println("     [" + i + "] " + fUnit[i] + " to " + sUnit[i] + " = " + answer[i]);
            }
            System.out.println("-------------------------------------------------------------------");
            System.out.println("         [D] Delete      [C] Clear History      [0] Back");
            System.out.println("===================================================================");
            System.out.print("Select an option: ");
            String choice = s.next();

            switch (choice.toUpperCase()) {
                case "D":
                    deleteEntry(fUnit, sUnit, answer, historyIndexArr);
                    break;

                case "C":
                    clearHistory(fUnit, sUnit, answer, historyIndexArr);
                    break;

                case "0":
                    t = false;
                    break;

                default:
                    System.out.println("Invalid input. Please try again.");
            }
        }
    }

    private void deleteEntry(String[] fUnit, String[] sUnit, double[] answer, int[] historyIndexArr) {
        Scanner s = new Scanner(System.in);

        System.out.print("Enter the index to delete: ");
        int index = s.nextInt();

        if (index >= 0 && index < historyIndexArr[0]) {
            for (int i = index; i < historyIndexArr[0] - 1; i++) {
                fUnit[i] = fUnit[i + 1];
                sUnit[i] = sUnit[i + 1];
                answer[i] = answer[i + 1];
            }

            historyIndexArr[0]--;
            System.out.println("Entry deleted successfully!");
        } else {
            System.out.println("Invalid index. Please enter a valid index.");
        }
    }

    private void clearHistory(String[] fUnit, String[] sUnit, double[] answer, int[] historyIndexArr) {
        for (int i = 0; i < historyIndexArr[0]; i++) {
            fUnit[i] = null;
            sUnit[i] = null;
            answer[i] = 0;
        }
        historyIndexArr[0] = 0;
        System.out.println("===================================================================");
        System.out.println("  HISTORY CLEARED!");
        System.out.println("===================================================================");
    }
}

class Area {
    public void a(String[] fUnit, String[] sUnit, double[] answer, int[] historyIndexArr) {
		Scanner s = new Scanner(System.in);
		boolean t=true;
		
		while(t){
			System.out.println("-----------------------------------");
			System.out.println("Select Area Unit:");
			System.out.println("   [1] Hectares(ha)");
			System.out.println("   [2] Square Centimeters(cm²)");
			System.out.println("   [3] Square Feet(ft²)");
			System.out.println("   [4] Square Inches(in²)");
			System.out.println("   [5] Square Meters(m²)");
			System.out.println("   [0] Exit");
			System.out.println("-----------------------------------");
			
			System.out.print("Input your choice [0-5]: ");
            int choice2 = s.nextInt();

            switch (choice2) {
                case 1:
                    System.out.print("Input value of Hectares(ha): ");
                    double hec = s.nextDouble();
                    fUnit[historyIndexArr[0]] = hec + " ha";

                    System.out.println("-----------------------------------");
                    System.out.println("Select Area Unit:");
                    System.out.println("   [1] Square Centimeters(cm²)");
                    System.out.println("   [2] Square Feet(ft²)");
                    System.out.println("   [3] Square Inches(in²)");
                    System.out.println("   [4] Square Meters(m²)");
                    System.out.println("-----------------------------------");

                    boolean h = true;
                    while (h) {
                        System.out.print("Convert to: ");
                        int unit = s.nextInt();

                        if (unit == 1) {
                            sUnit[historyIndexArr[0]] = "Square Centimeters(cm²)";
                            answer[historyIndexArr[0]] = hec * 10000000;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "cm²");
                            System.out.println("===================================\n");

                            h = false;
                            t = false;
                        } else if (unit == 2) {
                            sUnit[historyIndexArr[0]] = "Square Feet(ft²)";
                            answer[historyIndexArr[0]] = hec * 107639.104;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "ft²");
                            System.out.println("===================================\n");

                            h = false;
                            t = false;
                        } else if (unit == 3) {
                            sUnit[historyIndexArr[0]] = "Square Inches(in²)";
                            answer[historyIndexArr[0]] = hec * 15500031;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "in²");
                            System.out.println("===================================\n");

                            h = false;
                            t = false;
                        } else if (unit == 4) {
                            sUnit[historyIndexArr[0]] = "Square Meters(m²)";
                            answer[historyIndexArr[0]] = hec * 10000;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "m²");
                            System.out.println("===================================\n");

                            h = false;
                            t = false;
                        } else {
                            System.out.println("INVALID INPUT!");
                        }
                    }
                    // Increment historyIndex after saving the conversion result
                    historyIndexArr[0]++;
                    break;
					
				case 2: 
				
					System.out.print("Input value of Square Centimeters(cm²): ");
					double cen = s.nextDouble();
					fUnit[historyIndexArr[0]] = cen + " cm²";
					
					System.out.println("-----------------------------------");
					System.out.println("Select Area Unit:");
					System.out.println("   [1] Hectares(ha)");
					System.out.println("   [2] Square Feet(ft²)");
					System.out.println("   [3] Square Inches(in²)");
					System.out.println("   [4] Square Meters(m²)");
					System.out.println("-----------------------------------");
					
					boolean c=true;
					while (c) {
						System.out.print("Convert to: ");
						int unit = s.nextInt();
						
						if (unit == 1){
							sUnit[historyIndexArr[0]] = "Hectares(ha)";
                            answer[historyIndexArr[0]] = cen / 10000;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "ha");
                            System.out.println("===================================\n");

                            c = false;
                            t = false;
							
						} else if (unit == 2){
							sUnit[historyIndexArr[0]] = "Square Feet(ft²)";
                            answer[historyIndexArr[0]] = cen * 0.00107639;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "ft²");
                            System.out.println("===================================\n");

                            c = false;
                            t = false;
							
						} else if (unit == 3){
							sUnit[historyIndexArr[0]] = "Square Inches(in²)";
                            answer[historyIndexArr[0]] = cen * 0.1550;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "in²");
                            System.out.println("===================================\n");

                            c = false;
                            t = false;
							
						} else if (unit == 4){
							sUnit[historyIndexArr[0]] = "Square Meters(m²)";
                            answer[historyIndexArr[0]] = cen * 0.0001;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "m²");
                            System.out.println("===================================\n");

                            c = false;
                            t = false;
							
						} else {
							System.out.println("INVALID INPUT!");
						}
					}
						
					historyIndexArr[0]++;
                    break;
					
				case 3:
					System.out.print("Input value of Square Feet(ft²): ");
					double feet = s.nextDouble();
					fUnit[historyIndexArr[0]] = feet + " ft²";

					System.out.println("-----------------------------------");
					System.out.println("Select Area Unit:");
					System.out.println("   [1] Hectares(ha)");
					System.out.println("   [2] Square Centimeters(cm²)");
					System.out.println("   [3] Square Inches(in²)");
					System.out.println("   [4] Square Meters(m²)");
					System.out.println("-----------------------------------");

					boolean f = true;
					while (f) {
						System.out.print("Convert to: ");
						int unit = s.nextInt();

						if (unit == 1) {
							sUnit[historyIndexArr[0]] = "Hectares(ha)";
							answer[historyIndexArr[0]] = feet / 10763.9;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "ha");
							System.out.println("===================================\n");
							f = false;
							t = false;
						} else if (unit == 2) {
							sUnit[historyIndexArr[0]] = "Square Centimeters(cm²)";
							answer[historyIndexArr[0]] = feet * 929.0304;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "cm²");
							System.out.println("===================================\n");
							f = false;
							t = false;
						} else if (unit == 3) {
							sUnit[historyIndexArr[0]] = "Square Inches(in²)";
							answer[historyIndexArr[0]] = feet * 144;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "in²");
							System.out.println("===================================\n");
							f = false;
							t = false;
						} else if (unit == 4) {
							sUnit[historyIndexArr[0]] = "Square Meters(m²)";
							answer[historyIndexArr[0]] = feet * 0.092903;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "m²");
							System.out.println("===================================\n");
							f = false;
							t = false;
						} else {
							System.out.println("INVALID INPUT!");
						}
					}

					historyIndexArr[0]++;
					break;
				
				case 4:
					System.out.print("Input value of Square Inches(in²): ");
					double inc = s.nextDouble();
					fUnit[historyIndexArr[0]] = inc + " in²";

					System.out.println("-----------------------------------");
					System.out.println("Select Area Unit:");
					System.out.println("   [1] Hectares(ha)");
					System.out.println("   [2] Square Centimeters(cm²)");
					System.out.println("   [3] Square Feet(ft²)");
					System.out.println("   [4] Square Meters(m²)");
					System.out.println("-----------------------------------");

					boolean i = true;
					while (i) {
						System.out.print("Convert to: ");
						int unit = s.nextInt();

						if (unit == 1) {
							sUnit[historyIndexArr[0]] = "Hectares(ha)";
							answer[historyIndexArr[0]] = (inc * 0.00064516) / 10000;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "ha");
							System.out.println("===================================\n");
							i = false;
							t = false;
						} else if (unit == 2) {
							sUnit[historyIndexArr[0]] = "Square Centimeters(cm²)";
							answer[historyIndexArr[0]] = inc * 6.4516;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "cm²");
							System.out.println("===================================\n");
							i = false;
							t = false;
						} else if (unit == 3) {
							sUnit[historyIndexArr[0]] = "Square Feet(ft²)";
							answer[historyIndexArr[0]] = inc * 0.00694444;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "ft²");
							System.out.println("===================================\n");
							i = false;
							t = false;
						} else if (unit == 4) {
							sUnit[historyIndexArr[0]] = "Square Meters(m²)";
							answer[historyIndexArr[0]] = inc * 0.00064516;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "m²");
							System.out.println("===================================\n");
							i = false;
							t = false;
						} else {
							System.out.println("INVALID INPUT!");
						}
					}

					historyIndexArr[0]++;
					break;
				
			case 5:
				System.out.print("Input value of Square Meters(m²): ");
				double met = s.nextDouble();
				fUnit[historyIndexArr[0]] = met + " m²";

				System.out.println("-----------------------------------");
				System.out.println("Select Area Unit:");
				System.out.println("   [1] Hectares(ha)");
				System.out.println("   [2] Square Centimeters(cm²)");
				System.out.println("   [3] Square Feet(ft²)");
				System.out.println("   [4] Square Inches(in²)");
				System.out.println("-----------------------------------");

				boolean m = true;
				while (m) {
					System.out.print("Convert to: ");
					int unit = s.nextInt();

					if (unit == 1) {
						sUnit[historyIndexArr[0]] = "Hectares(ha)";
						answer[historyIndexArr[0]] = met * 0.0001;
						System.out.println("===================================");
						System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "ha");
						System.out.println("===================================\n");
						m = false;
						t = false;
					} else if (unit == 2) {
						sUnit[historyIndexArr[0]] = "Square Centimeters(cm²)";
						answer[historyIndexArr[0]] = met * 10000;
						System.out.println("===================================");
						System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "cm²");
						System.out.println("===================================\n");
						m = false;
						t = false;
					} else if (unit == 3) {
						sUnit[historyIndexArr[0]] = "Square Feet(ft²)";
						answer[historyIndexArr[0]] = met * 10.7639;
						System.out.println("===================================");
						System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "ft²");
						System.out.println("===================================\n");
						m = false;
						t = false;
					} else if (unit == 4) {
						sUnit[historyIndexArr[0]] = "Square Inches(in²)";
						answer[historyIndexArr[0]] = met * 1550.0031;
						System.out.println("===================================");
						System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + "in²");
						System.out.println("===================================\n");
						m = false;
						t = false;
					} else {
						System.out.println("INVALID INPUT!");
					}
				}

				historyIndexArr[0]++;
				break;

			case 0: 
				t=false;
				break;

			default:
				System.out.println("INVALID INPUT!");
				break;

			}
		}	
		
    }
}

class Length {
    public void l(String[] fUnit, String[] sUnit, double[] answer, int[] historyIndexArr) {
        Scanner s = new Scanner(System.in);
        boolean t = true;

        while (t) {
            System.out.println("-----------------------------------");
            System.out.println("Select Length Unit:");
            System.out.println("   [1] Centimeters(cm)");
            System.out.println("   [2] Meters(m)");
            System.out.println("   [3] Kilometers(km)");
            System.out.println("   [4] Inches(in)");
            System.out.println("   [5] Feet(ft)");
            System.out.println("   [0] Exit");
            System.out.println("-----------------------------------");

            System.out.print("Input your choice [0-5]: ");
            int choice2 = s.nextInt();

            switch (choice2) {
                case 1:
					// Code for converting centimeters
                    System.out.print("Input value of Centimeters(cm): ");
                    double cen = s.nextDouble();
                    fUnit[historyIndexArr[0]] = cen + " cm";

                    System.out.println("-----------------------------------");
                    System.out.println("Select Length Unit:");
                    System.out.println("   [1] Meters(m)");
                    System.out.println("   [2] Kilometers(km)");
                    System.out.println("   [3] Inches(in)");
                    System.out.println("   [4] Feet(ft)");
                    System.out.println("-----------------------------------");

                    boolean h = true;
                    while (h) {
                        System.out.print("Convert to: ");
                        int unit = s.nextInt();

                        if (unit == 1) {
                            sUnit[historyIndexArr[0]] = "Meters(m)";
                            answer[historyIndexArr[0]] = cen / 100;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " m");
                            System.out.println("===================================\n");
                            h = false;
                            t = false;
                        } else if (unit == 2) {
                            sUnit[historyIndexArr[0]] = "Kilometers(km)";
                            answer[historyIndexArr[0]] = cen / 100000;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " km");
                            System.out.println("===================================\n");
                            h = false;
                            t = false;
                        } else if (unit == 3) {
                            sUnit[historyIndexArr[0]] = "Inches(in)";
                            answer[historyIndexArr[0]] = cen * 0.393701;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " in");
                            System.out.println("===================================\n");
                            h = false;
                            t = false;
                        } else if (unit == 4) {
                            sUnit[historyIndexArr[0]] = "Feet(ft)";
                            answer[historyIndexArr[0]] = cen * 0.0328084;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " ft");
                            System.out.println("===================================\n");
                            h = false;
                            t = false;
                        } else {
                            System.out.println("INVALID INPUT!");
                        }
                    }
                    historyIndexArr[0]++;
                    break;

				case 2:
					// Code for converting meters
					System.out.print("Input value of Meters(m): ");
					double met = s.nextDouble();
					fUnit[historyIndexArr[0]] = met + " m";

					System.out.println("-----------------------------------");
					System.out.println("Select Length Unit:");
					System.out.println("   [1] Centimeters(cm)");
					System.out.println("   [2] Kilometers(km)");
					System.out.println("   [3] Inches(in)");
					System.out.println("   [4] Feet(ft)");
					System.out.println("-----------------------------------");

					boolean c = true;
					while (c) {
						System.out.print("Convert to: ");
						int unit = s.nextInt();

						if (unit == 1) {
							sUnit[historyIndexArr[0]] = "Centimeters(cm)";
							answer[historyIndexArr[0]] = met * 100;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " cm");
							System.out.println("===================================\n");
							c = false;
							t = false;
						} else if (unit == 2) {
							// Conversion from meters to kilometers
							sUnit[historyIndexArr[0]] = "Kilometers(km)";
							answer[historyIndexArr[0]] = met / 1000;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " km");
							System.out.println("===================================\n");
							c = false;
							t = false;
						} else if (unit == 3) {
							// Conversion from meters to inches
							sUnit[historyIndexArr[0]] = "Inches(in)";
							answer[historyIndexArr[0]] = met * 39.3701;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " in");
							System.out.println("===================================\n");
							c = false;
							t = false;
						} else if (unit == 4) {
							// Conversion from meters to feet
							sUnit[historyIndexArr[0]] = "Feet(ft)";
							answer[historyIndexArr[0]] = met * 3.28084;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " ft");
							System.out.println("===================================\n");
							c = false;
							t = false;
						} else {
							System.out.println("INVALID INPUT!");
						}
					}
					historyIndexArr[0]++;
					break;

				case 3:
				// Code for converting kilometers
					System.out.print("Input value of Kilometers(km): ");
					double kil = s.nextDouble();
					fUnit[historyIndexArr[0]] = kil + " km";

					System.out.println("-----------------------------------");
					System.out.println("Select Length Unit:");
					System.out.println("   [1] Centimeters(cm)");
					System.out.println("   [2] Meters(m)");
					System.out.println("   [3] Inches(in)");
					System.out.println("   [4] Feet(ft)");
					System.out.println("-----------------------------------");

					boolean f = true;
					while (f) {
						System.out.print("Convert to: ");
						int unit = s.nextInt();

						if (unit == 1) {
							sUnit[historyIndexArr[0]] = "Centimeters(cm)";
							answer[historyIndexArr[0]] = kil * 100000;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " cm");
							System.out.println("===================================\n");
							f = false;
							t = false;
						} else if (unit == 2) {
							sUnit[historyIndexArr[0]] = "Meters(m)";
							answer[historyIndexArr[0]] = kil * 1000;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " m");
							System.out.println("===================================\n");
							f = false;
							t = false;
						} else if (unit == 3) {
							sUnit[historyIndexArr[0]] = "Inches(in)";
							answer[historyIndexArr[0]] = kil * 39370.1;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " in");
							System.out.println("===================================\n");
							f = false;
							t = false;
						} else if (unit == 4) {
							sUnit[historyIndexArr[0]] = "Feet(ft)";
							answer[historyIndexArr[0]] = kil * 3280.84;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " ft");
							System.out.println("===================================\n");
							f = false;
							t = false;
						} else {
							System.out.println("INVALID INPUT!");
						}
					}
					historyIndexArr[0]++;
					break;

				case 4:
					// Code for converting inches
					System.out.print("Input value of Inches(in): ");
					double inc = s.nextDouble();
					fUnit[historyIndexArr[0]] = inc + " in";

					System.out.println("-----------------------------------");
					System.out.println("Select Length Unit:");
					System.out.println("   [1] Centimeters(cm)");
					System.out.println("   [2] Meters(m)");
					System.out.println("   [3] Kilometers(km)");
					System.out.println("   [4] Feet(ft)");
					System.out.println("-----------------------------------");

					boolean i = true;
					while (i) {
						System.out.print("Convert to: ");
						int unit = s.nextInt();

						if (unit == 1) {
							sUnit[historyIndexArr[0]] = "Centimeters(cm)";
							answer[historyIndexArr[0]] = inc * 2.54;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " cm");
							System.out.println("===================================\n");
							i = false;
							t = false;
						} else if (unit == 2) {
							sUnit[historyIndexArr[0]] = "Meters(m)";
							answer[historyIndexArr[0]] = inc * 0.0254;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " m");
							System.out.println("===================================\n");
							i = false;
							t = false;
						} else if (unit == 3) {
							sUnit[historyIndexArr[0]] = "Kilometers(km)";
							answer[historyIndexArr[0]] = inc * 0.0000254;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " km");
							System.out.println("===================================\n");
							i = false;
							t = false;
						} else if (unit == 4) {
							sUnit[historyIndexArr[0]] = "Feet(ft)";
							answer[historyIndexArr[0]] = inc / 12;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " ft");
							System.out.println("===================================\n");
							i = false;
							t = false;
						} else {
							System.out.println("INVALID INPUT!");
						}
					}
					historyIndexArr[0]++;
					break;

				case 5:
					// Code for converting feet
					System.out.print("Input value of Feet(ft): ");
					double feet = s.nextDouble();
					fUnit[historyIndexArr[0]] = feet + " ft";

					System.out.println("-----------------------------------");
					System.out.println("Select Length Unit:");
					System.out.println("   [1] Centimeters(cm)");
					System.out.println("   [2] Meters(m)");
					System.out.println("   [3] Kilometers(km)");
					System.out.println("   [4] Inches(in)");
					System.out.println("-----------------------------------");

					boolean m = true;
					while (m) {
						System.out.print("Convert to: ");
						int unit = s.nextInt();

						if (unit == 1) {
							sUnit[historyIndexArr[0]] = "Centimeters(cm)";
							answer[historyIndexArr[0]] = feet * 30.48;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " cm");
							System.out.println("===================================\n");
							m = false;
							t = false;
						} else if (unit == 2) {
							sUnit[historyIndexArr[0]] = "Meters(m)";
							answer[historyIndexArr[0]] = feet * 0.3048;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " m");
							System.out.println("===================================\n");
							m = false;
							t = false;
						} else if (unit == 3) {
							sUnit[historyIndexArr[0]] = "Kilometers(km)";
							answer[historyIndexArr[0]] = feet * 0.003048;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " km");
							System.out.println("===================================\n");
							m = false;
							t = false;
						} else if (unit == 4) {
							sUnit[historyIndexArr[0]] = "Inches(in)";
							answer[historyIndexArr[0]] = feet * 12;
							System.out.println("===================================");
							System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " in");
							System.out.println("===================================\n");
							m = false;
							t = false;
						} else {
							System.out.println("INVALID INPUT!");
						}
					}
					historyIndexArr[0]++;
					break;

                case 0:
                    t = false;
                    break;

                default:
                    System.out.println("INVALID INPUT!");
                    break;
            }
        }
    }
}

class Temperature {
    public void t(String[] fUnit, String[] sUnit, double[] answer, int[] historyIndexArr) {
        Scanner s = new Scanner(System.in);
        boolean t = true;

        while (t) {
            System.out.println("-----------------------------------");
            System.out.println("Select area unit:");
            System.out.println("   [1] Celsius(°C)");
            System.out.println("   [2] Fahrenheit(°F)");
            System.out.println("   [3] Kelvin(K)");
            System.out.println("   [0] Exit");
            System.out.println("-----------------------------------");

            System.out.print("Input your choice [0-3]: ");
            int choice2 = s.nextInt();

            switch (choice2) {
                case 1:
                    System.out.print("Input value of Celsius(°C): ");
                    double cel = s.nextDouble();
                    fUnit[historyIndexArr[0]] = cel + " °C";

                    System.out.println("-----------------------------------");
                    System.out.println("Select Temperature Unit:");
                    System.out.println("   [1] Fahrenheit(°F)");
                    System.out.println("   [2] Kelvin(K)");
                    System.out.println("-----------------------------------");

                    boolean h = true;
                    while (h) {
                        System.out.print("Convert to: ");
                        int unit = s.nextInt();

                        if (unit == 1) {
                            sUnit[historyIndexArr[0]] = "Fahrenheit(°F)";
                            answer[historyIndexArr[0]] = cel * 9 / 5 + 32;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " °F");
                            System.out.println("===================================\n");
                            h = false;
                            t = false;
                        } else if (unit == 2) {
                            sUnit[historyIndexArr[0]] = "Kelvin(K)";
                            answer[historyIndexArr[0]] = cel + 273.15;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " K");
                            System.out.println("===================================\n");
                            h = false;
                            t = false;
                        } else {
                            System.out.println("INVALID INPUT!");
                        }
                    }

                    break;

                case 2:
                    // Code for Fahrenheit
                    System.out.print("Input value of Fahrenheit(°F): ");
                    double fah = s.nextDouble();
                    fUnit[historyIndexArr[0]] = fah + " °F";

                    System.out.println("-----------------------------------");
                    System.out.println("Select Temperature Unit:");
                    System.out.println("   [1] Celsius(°C)");
                    System.out.println("   [2] Kelvin(K)");
                    System.out.println("-----------------------------------");

                    boolean c = true;
                    while (c) {
                        System.out.print("Convert to: ");
                        int unit = s.nextInt();

                        if (unit == 1) {
                            sUnit[historyIndexArr[0]] = "Celsius(°C)";
                            answer[historyIndexArr[0]] = (fah - 32) * 5 / 9;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " °C");
                            System.out.println("===================================\n");
                            c = false;
                            t = false;
                        } else if (unit == 2) {
                            sUnit[historyIndexArr[0]] = "Kelvin(K)";
                            answer[historyIndexArr[0]] = (fah - 32) * 5 / 9 + 273.15;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " K");
                            System.out.println("===================================\n");
                            c = false;
                            t = false;
                        } else {
                            System.out.println("INVALID INPUT!");
                        }
                    }

                    break;

                case 3:
                    // Code for Kelvin
                    System.out.print("Input value of Kelvin(K): ");
                    double kel = s.nextDouble();
                    fUnit[historyIndexArr[0]] = kel + " K";

                    System.out.println("-----------------------------------");
                    System.out.println("Select Temperature Unit:");
                    System.out.println("   [1] Celsius(°C)");
                    System.out.println("   [2] Fahrenheit(°F)");
                    System.out.println("-----------------------------------");

                    boolean k = true;
                    while (k) {
                        System.out.print("Convert to: ");
                        int unit = s.nextInt();

                        if (unit == 1) {
                            sUnit[historyIndexArr[0]] = "Celsius(°C)";
                            answer[historyIndexArr[0]] = kel - 273.15;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " °C");
                            System.out.println("===================================\n");
                            k = false;
                            t = false;
                        } else if (unit == 2) {
                            sUnit[historyIndexArr[0]] = "Fahrenheit(°F)";
                            answer[historyIndexArr[0]] = (kel - 273.15) * 9 / 5 + 32;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " °F");
                            System.out.println("===================================\n");
                            k = false;
                            t = false;
                        } else {
                            System.out.println("INVALID INPUT!");
                        }
                    }

                    break;

                case 0:
                    t = false;
                    break;

                default:
                    System.out.println("INVALID INPUT!");
                    break;
            }
        }

        historyIndexArr[0]++;
    }
}

class Volume {
    public void v(String[] fUnit, String[] sUnit, double[] answer, int[] historyIndexArr) {
        Scanner s = new Scanner(System.in);
        boolean t = true;

        while (t) {
            System.out.println("-----------------------------------");
            System.out.println("Select Volume Unit:");
            System.out.println("   [1] Liters(L)");
            System.out.println("   [2] Milliliters(mL)");
            System.out.println("   [3] Cubic Centimeters(cm³)");
            System.out.println("   [4] Cubic Meters(m³)");
            System.out.println("   [5] Cubic Inches(in³)");
            System.out.println("   [0] Exit");
            System.out.println("-----------------------------------");

            System.out.print("Input your choice [0-5]: ");
            int choice2 = s.nextInt();

            switch (choice2) {
                case 1:
                    System.out.print("Input value of Liters(L): ");
                    double liters = s.nextDouble();
                    fUnit[historyIndexArr[0]] = liters + " L";

                    System.out.println("-----------------------------------");
                    System.out.println("Select Volume Unit:");
                    System.out.println("   [1] Milliliters(mL)");
                    System.out.println("   [2] Cubic Centimeters(cm³)");
                    System.out.println("   [3] Cubic Meters(m³)");
                    System.out.println("   [4] Cubic Inches(in³)");
                    System.out.println("-----------------------------------");

                    boolean h = true;
                    while (h) {
                        System.out.print("Convert to: ");
                        int unit = s.nextInt();

                        if (unit == 1) {
                            sUnit[historyIndexArr[0]] = "Milliliters(mL)";
                            answer[historyIndexArr[0]] = liters * 1000;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " mL");
                            System.out.println("===================================\n");
                            h = false;
                            t = false;
                        } else if (unit == 2) {
                            sUnit[historyIndexArr[0]] = "Cubic Centimeters(cm³)";
                            answer[historyIndexArr[0]] = liters * 1000;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " cm³");
                            System.out.println("===================================\n");
                            h = false;
                            t = false;
                        } else if (unit == 3) {
                            sUnit[historyIndexArr[0]] = "Cubic Meters(m³)";
                            answer[historyIndexArr[0]] = liters * 0.001;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " m³");
                            System.out.println("===================================\n");
                            h = false;
                            t = false;
                        } else if (unit == 4) {
                            sUnit[historyIndexArr[0]] = "Cubic Inches(in³)";
                            answer[historyIndexArr[0]] = liters * 61.0237;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " in³");
                            System.out.println("===================================\n");
                            h = false;
                            t = false;
                        } else {
                            System.out.println("INVALID INPUT!");
                        }
                    }

                    break;

                case 2:
                    // Code for Milliliters
                    System.out.print("Input value of Milliliters(mL): ");
                    double milliliters = s.nextDouble();
                    fUnit[historyIndexArr[0]] = milliliters + " mL";

                    System.out.println("-----------------------------------");
                    System.out.println("Select Volume Unit:");
                    System.out.println("   [1] Liters(L)");
                    System.out.println("   [2] Cubic Centimeters(cm³)");
                    System.out.println("   [3] Cubic Meters(m³)");
                    System.out.println("   [4] Cubic Inches(in³)");
                    System.out.println("-----------------------------------");

                    boolean c = true;
                    while (c) {
                        System.out.print("Convert to: ");
                        int unit = s.nextInt();

                        if (unit == 1) {
                            sUnit[historyIndexArr[0]] = "Liters(L)";
                            answer[historyIndexArr[0]] = milliliters * 0.001;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " L");
                            System.out.println("===================================\n");
                            c = false;
                            t = false;
                        } else if (unit == 2) {
                            sUnit[historyIndexArr[0]] = "Cubic Centimeters(cm³)";
                            answer[historyIndexArr[0]] = milliliters * 1;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " cm³");
                            System.out.println("===================================\n");
                            c = false;
                            t = false;
                        } else if (unit == 3) {
                            sUnit[historyIndexArr[0]] = "Cubic Meters(m³)";
                            answer[historyIndexArr[0]] = milliliters * 0.000001;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " m³");
                            System.out.println("===================================\n");
                            c = false;
                            t = false;
                        } else if (unit == 4) {
                            sUnit[historyIndexArr[0]] = "Cubic Inches(in³)";
                            answer[historyIndexArr[0]] = milliliters * 0.0610237;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " in³");
                            System.out.println("===================================\n");
                            c = false;
                            t = false;
                        } else {
                            System.out.println("INVALID INPUT!");
                        }
                    }

                    break;

                case 3:
                    // Code for Cubic Centimeters
                    System.out.print("Input value of Cubic Centimeters(cm³): ");
                    double cubicCentimeters = s.nextDouble();
                    fUnit[historyIndexArr[0]] = cubicCentimeters + " cm³";

                    System.out.println("-----------------------------------");
                    System.out.println("Select Volume Unit:");
                    System.out.println("   [1] Liters(L)");
                    System.out.println("   [2] Milliliters(mL)");
                    System.out.println("   [3] Cubic Meters(m³)");
                    System.out.println("   [4] Cubic Inches(in³)");
                    System.out.println("-----------------------------------");

                    boolean f = true;
                    while (f) {
                        System.out.print("Convert to: ");
                        int unit = s.nextInt();

                        if (unit == 1) {
                            sUnit[historyIndexArr[0]] = "Liters(L)";
                            answer[historyIndexArr[0]] = cubicCentimeters * 0.001;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " L");
                            System.out.println("===================================\n");
                            f = false;
                            t = false;
                        } else if (unit == 2) {
                            sUnit[historyIndexArr[0]] = "Milliliters(mL)";
                            answer[historyIndexArr[0]] = cubicCentimeters * 1;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " mL");
                            System.out.println("===================================\n");
                            f = false;
                            t = false;
                        } else if (unit == 3) {
                            sUnit[historyIndexArr[0]] = "Cubic Meters(m³)";
                            answer[historyIndexArr[0]] = cubicCentimeters * 0.000001;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " m³");
                            System.out.println("===================================\n");
                            f = false;
                            t = false;
                        } else if (unit == 4) {
                            sUnit[historyIndexArr[0]] = "Cubic Inches(in³)";
                            answer[historyIndexArr[0]] = cubicCentimeters * 0.0610237;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " in³");
                            System.out.println("===================================\n");
                            f = false;
                            t = false;
                        } else {
                            System.out.println("INVALID INPUT!");
                        }
                    }

                    break;

                case 4:
                    // Code for Cubic Meters
                    System.out.print("Input value of Cubic Meters(m³): ");
                    double cubicMeters = s.nextDouble();
                    fUnit[historyIndexArr[0]] = cubicMeters + " m³";

                    System.out.println("-----------------------------------");
                    System.out.println("Select Volume Unit:");
                    System.out.println("   [1] Liters(L)");
                    System.out.println("   [2] Milliliters(mL)");
                    System.out.println("   [3] Cubic Centimeters(cm³)");
                    System.out.println("   [4] Cubic Inches(in³)");
                    System.out.println("-----------------------------------");

                    boolean i = true;
                    while (i) {
                        System.out.print("Convert to: ");
                        int unit = s.nextInt();

                        if (unit == 1) {
                            sUnit[historyIndexArr[0]] = "Liters(L)";
                            answer[historyIndexArr[0]] = cubicMeters * 1000;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " L");
                            System.out.println("===================================\n");
                            i = false;
                            t = false;
                        } else if (unit == 2) {
                            sUnit[historyIndexArr[0]] = "Milliliters(mL)";
                            answer[historyIndexArr[0]] = cubicMeters * 1000000;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " mL");
                            System.out.println("===================================\n");
                            i = false;
                            t = false;
                        } else if (unit == 3) {
                            sUnit[historyIndexArr[0]] = "Cubic Centimeters(cm³)";
                            answer[historyIndexArr[0]] = cubicMeters * 1000000;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " cm³");
                            System.out.println("===================================\n");
                            i = false;
                            t = false;
                        } else if (unit == 4) {
                            sUnit[historyIndexArr[0]] = "Cubic Inches(in³)";
                            answer[historyIndexArr[0]] = cubicMeters * 61023.7;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " in³");
                            System.out.println("===================================\n");
                            i = false;
                            t = false;
                        } else {
                            System.out.println("INVALID INPUT!");
                        }
                    }

                    break;

                case 5:
                    // Code for Cubic Inches
                    System.out.print("Input value of Cubic Inches(in³): ");
                    double cubicInches = s.nextDouble();
                    fUnit[historyIndexArr[0]] = cubicInches + " in³";

                    System.out.println("-----------------------------------");
                    System.out.println("Select Volume Unit:");
                    System.out.println("   [1] Liters(L)");
                    System.out.println("   [2] Milliliters(mL)");
                    System.out.println("   [3] Cubic Centimeters(cm³)");
                    System.out.println("   [4] Cubic Meters(m³)");
                    System.out.println("-----------------------------------");

                    boolean m = true;
                    while (m) {
                        System.out.print("Convert to: ");
                        int unit = s.nextInt();

                        if (unit == 1) {
                            sUnit[historyIndexArr[0]] = "Liters(L)";
                            answer[historyIndexArr[0]] = (cubicInches * 0.0163871) / 1000;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " L");
                            System.out.println("===================================\n");
                            m = false;
                            t = false;
                        } else if (unit == 2) {
                            sUnit[historyIndexArr[0]] = "Milliliters(mL)";
                            answer[historyIndexArr[0]] = cubicInches * 16.3871;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " mL");
                            System.out.println("===================================\n");
                            m = false;
                            t = false;
                        } else if (unit == 3) {
                            sUnit[historyIndexArr[0]] = "Cubic Centimeters(cm³)";
                            answer[historyIndexArr[0]] = cubicInches * 16.3871;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " cm³");
                            System.out.println("===================================\n");
                            m = false;
                            t = false;
                        } else if (unit == 4) {
                            sUnit[historyIndexArr[0]] = "Cubic Meters(m³)";
                            answer[historyIndexArr[0]] = cubicInches * 0.0000163871;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " m³");
                            System.out.println("===================================\n");
                            m = false;
                            t = false;
                        } else {
                            System.out.println("INVALID INPUT!");
                        }
                    }
                    break;

                case 0:
                    t = false;
                    break;
                default:
                    System.out.println("INVALID INPUT!");
                    break;
            }
        }

        historyIndexArr[0]++;
    }
}

class Mass {
    public void m(String[] fUnit, String[] sUnit, double[] answer, int[] historyIndexArr) {
        Scanner s = new Scanner(System.in);
        boolean t = true;

        while (t) {
            System.out.println("-----------------------------------");
            System.out.println("Select Mass Unit:");
            System.out.println("   [1] Tons(t)");
            System.out.println("   [2] Pounds(lb)");
            System.out.println("   [3] Ounces(oz)");
            System.out.println("   [4] Kilograms(kg)");
            System.out.println("   [5] Grams(g)");
            System.out.println("   [0] Exit");
            System.out.println("-----------------------------------");

            System.out.print("Input your choice [0-5]: ");
            int choice2 = s.nextInt();

            switch (choice2) {
                case 1:
                    System.out.print("Input value of Tons (t): ");
                    double tons = s.nextDouble();
                    fUnit[historyIndexArr[0]] = tons + " t";

                    System.out.println("-----------------------------------");
                    System.out.println("Select Mass Unit:");
                    System.out.println("   [1] Pounds(lb)");
                    System.out.println("   [2] Ounces(oz)");
                    System.out.println("   [3] Kilograms(kg)");
                    System.out.println("   [4] Grams(g)");
                    System.out.println("-----------------------------------");

                    boolean h = true;
                    while (h) {
                        System.out.print("Convert to: ");
                        int unit = s.nextInt();

                        if (unit == 1) {
                            sUnit[historyIndexArr[0]] = "Pounds(lb)";
                            answer[historyIndexArr[0]] = tons * 2204.62;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " lb");
                            System.out.println("===================================\n");
                            h = false;
                            t = false;
                        } else if (unit == 2) {
                            sUnit[historyIndexArr[0]] = "Ounces(oz)";
                            answer[historyIndexArr[0]] = tons * 35274;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " oz");
                            System.out.println("===================================\n");
                            h = false;
                            t = false;
                        } else if (unit == 3) {
                            sUnit[historyIndexArr[0]] = "Kilograms(kg)";
                            answer[historyIndexArr[0]] = tons * 1000;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " kg");
                            System.out.println("===================================\n");
                            h = false;
                            t = false;
                        } else if (unit == 4) {
                            sUnit[historyIndexArr[0]] = "Grams(g)";
                            answer[historyIndexArr[0]] = tons * 1000000;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " g");
                            System.out.println("===================================\n");
                            h = false;
                            t = false;
                        } else {
                            System.out.println("INVALID INPUT!");
                        }
                    }

                    break;

                case 2:
                    // Code for Pounds(lb)
                    System.out.print("Input value of Pounds(lb): ");
                    double pounds = s.nextDouble();
                    fUnit[historyIndexArr[0]] = pounds + " lb";

                    System.out.println("-----------------------------------");
                    System.out.println("Select Mass Unit:");
                    System.out.println("   [1] Tons(t)");
                    System.out.println("   [2] Ounces(oz)");
                    System.out.println("   [3] Kilograms(kg)");
                    System.out.println("   [4] Grams(g)");
                    System.out.println("-----------------------------------");

                    boolean c = true;
                    while (c) {
                        System.out.print("Convert to: ");
                        int unit = s.nextInt();

                        if (unit == 1) {
                            sUnit[historyIndexArr[0]] = "Tons(t)";
                            answer[historyIndexArr[0]] = pounds * 0.000453592;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " t");
                            System.out.println("===================================\n");
                            c = false;
                            t = false;
                        } else if (unit == 2) {
                            sUnit[historyIndexArr[0]] = "Ounces(oz)";
                            answer[historyIndexArr[0]] = pounds * 16;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " oz");
                            System.out.println("===================================\n");
                            c = false;
                            t = false;
                        } else if (unit == 3) {
                            sUnit[historyIndexArr[0]] = "Kilograms(kg)";
                            answer[historyIndexArr[0]] = pounds * 0.453592;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " kg");
                            System.out.println("===================================\n");
                            c = false;
                            t = false;
                        } else if (unit == 4) {
                            sUnit[historyIndexArr[0]] = "Grams(g)";
                            answer[historyIndexArr[0]] = pounds * 453.592;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " g");
                            System.out.println("===================================\n");
                            c = false;
                            t = false;
                        } else {
                            System.out.println("INVALID INPUT!");
                        }
                    }

                    break;

                case 3:
                    // Code for Ounces(oz)
                    System.out.print("Input value of Ounces(oz): ");
                    double ounces = s.nextDouble();
                    fUnit[historyIndexArr[0]] = ounces + " oz";

                    System.out.println("-----------------------------------");
                    System.out.println("Select Mass Unit:");
                    System.out.println("   [1] Tons(t)");
                    System.out.println("   [2] Pounds(lb)");
                    System.out.println("   [3] Kilograms(kg)");
                    System.out.println("   [4] Grams(g)");
                    System.out.println("-----------------------------------");

                    boolean f = true;
                    while (f) {
                        System.out.print("Convert to: ");
                        int unit = s.nextInt();

                        if (unit == 1) {
                            sUnit[historyIndexArr[0]] = "Tons(t)";
                            answer[historyIndexArr[0]] = ounces * 0.0000283495;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " t");
                            System.out.println("===================================\n");
                            f = false;
                            t = false;
                        } else if (unit == 2) {
                            sUnit[historyIndexArr[0]] = "Pounds(lb)";
                            answer[historyIndexArr[0]] = ounces * 0.0625;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " lb");
                            System.out.println("===================================\n");
                            f = false;
                            t = false;
                        } else if (unit == 3) {
                            sUnit[historyIndexArr[0]] = "Kilograms(kg)";
                            answer[historyIndexArr[0]] = ounces * 0.0283495;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " kg");
                            System.out.println("===================================\n");
                            f = false;
                            t = false;
                        } else if (unit == 4) {
                            sUnit[historyIndexArr[0]] = "Grams(g)";
                            answer[historyIndexArr[0]] = ounces * 28.3495;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " g");
                            System.out.println("===================================\n");
                            f = false;
                            t = false;
                        } else {
                            System.out.println("INVALID INPUT!");
                        }
                    }

                    break;

                case 4:
                    // Code for Kilograms(kg)
                    System.out.print("Input value of Kilograms(kg): ");
                    double kilograms = s.nextDouble();
                    fUnit[historyIndexArr[0]] = kilograms + " kg";

                    System.out.println("-----------------------------------");
                    System.out.println("Select Mass Unit:");
                    System.out.println("   [1] Tons(t)");
                    System.out.println("   [2] Pounds(lb)");
                    System.out.println("   [3] Ounces(oz)");
                    System.out.println("   [4] Grams(g)");
                    System.out.println("-----------------------------------");

                    boolean k = true;
                    while (k) {
                        System.out.print("Convert to: ");
                        int unit = s.nextInt();

                        if (unit == 1) {
                            sUnit[historyIndexArr[0]] = "Tons(t)";
                            answer[historyIndexArr[0]] = kilograms * 0.001;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " t");
                            System.out.println("===================================\n");
                            k = false;
                            t = false;
                        } else if (unit == 2) {
                            sUnit[historyIndexArr[0]] = "Pounds(lb)";
                            answer[historyIndexArr[0]] = kilograms * 2.20462;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " lb");
                            System.out.println("===================================\n");
                            k = false;
                            t = false;
                        } else if (unit == 3) {
                            sUnit[historyIndexArr[0]] = "Ounces(oz)";
                            answer[historyIndexArr[0]] = kilograms * 35.274;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " oz");
                            System.out.println("===================================\n");
                            k = false;
                            t = false;
                        } else if (unit == 4) {
                            sUnit[historyIndexArr[0]] = "Grams(g)";
                            answer[historyIndexArr[0]] = kilograms * 1000;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " g");
                            System.out.println("===================================\n");
                            k = false;
                            t = false;
                        } else {
                            System.out.println("INVALID INPUT!");
                        }
                    }

                    break;

				case 5:

                    System.out.print("Input value of Grams(g): ");
                    double grams = s.nextDouble();
                    fUnit[historyIndexArr[0]] = grams + " g";

                    System.out.println("-----------------------------------");
                    System.out.println("Select Mass Unit:");
                    System.out.println("   [1] Tons(t)");
                    System.out.println("   [2] Pounds(lb)");
                    System.out.println("   [3] Ounces(oz)");
                    System.out.println("   [4] Kilograms(kg)");
                    System.out.println("-----------------------------------");

                    boolean m = true;
                    while (m) {
                        System.out.print("Convert to: ");
                        int unit = s.nextInt();

                        if (unit == 1) {
                            sUnit[historyIndexArr[0]] = "Tons(t)";
                            answer[historyIndexArr[0]] = grams * 0.000001;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " t");
                            System.out.println("===================================\n");
                            m = false;
                            t = false;
                        } else if (unit == 2) {
                            sUnit[historyIndexArr[0]] = "Pounds(lb)";
                            answer[historyIndexArr[0]] = grams * 0.00220462;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " lb");
                            System.out.println("===================================\n");
                            m = false;
                            t = false;
                        } else if (unit == 3) {
                            sUnit[historyIndexArr[0]] = "Ounces(oz)";
                            answer[historyIndexArr[0]] = grams * 0.035274;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " oz");
                            System.out.println("===================================\n");
                            m = false;
                            t = false;
                        } else if (unit == 4) {
                            sUnit[historyIndexArr[0]] = "Kilograms(kg)";
                            answer[historyIndexArr[0]] = grams * 0.001;
                            System.out.println("===================================");
                            System.out.println("  ANSWER : " + answer[historyIndexArr[0]] + " kg");
                            System.out.println("===================================\n");
                            m = false;
                            t = false;
                        } else {
                            System.out.println("INVALID INPUT!");
                        }
                    }

                    break;

                case 0:
                    t = false;
                    break;

                default:
                    System.out.println("INVALID INPUT!");
                    break;

            }
        }

        historyIndexArr[0]++;
    }
}
