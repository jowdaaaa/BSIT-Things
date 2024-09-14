import java.io.File;
import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import org.w3c.dom.Document;
import org.w3c.dom.Element;
import org.w3c.dom.Node;
import org.w3c.dom.NodeList;

/**
 * This class is used to parse XML document using DOM parser.
 * @author javawithease
 */
public class JudahPauloVinas_5 {
	public static void main(String args[]){
		try {
			//File Path
			String filePath = "JudahPauloVinas_5.xml";
			
			//Read XML file.
			File inputFile = new File(filePath);
			
			//Create DocumentBuilderFactory object.
			DocumentBuilderFactory dbFactory 
			   = DocumentBuilderFactory.newInstance();
			
			//Get DocumentBuilder object.
			DocumentBuilder dBuilder = dbFactory.newDocumentBuilder();
			
			//Parse XML file.
			Document document = dBuilder.parse(inputFile);
			document.getDocumentElement().normalize();
			
			//Print root element.
			System.out.println("Root element:" 
			   + document.getDocumentElement().getNodeName());
			
			//Get element list.
			NodeList nodeList = document.getElementsByTagName("book");
			
			//Process element list.
			for (int temp = 0; temp < nodeList.getLength(); temp++) {
	            Node nNode = nodeList.item(temp);
	            System.out.println("\nCurrent Element:" 
	               + nNode.getNodeName());
	            if (nNode.getNodeType() == Node.ELEMENT_NODE) {
	               Element eElement = (Element) nNode;
                   
                   System.out.println("Book Title: " 
	                  + eElement.getElementsByTagName("title")
	                  .item(0).getTextContent());
	               
                    System.out.println("Author: " 
	                  + eElement.getAttribute("author"));
	               
	                System.out.println("Language: " 
	                + eElement.getElementsByTagName("language")
	                  .item(0).getTextContent());
	               
	                System.out.println("Publisher: " 
	                + eElement.getElementsByTagName("publisher")
	                  .item(0).getTextContent());

                    System.out.println("Pages: " 
                    + eElement.getElementsByTagName("pages")
                      .item(0).getTextContent());   
	            }
			}
		} catch (Exception e) {
			e.printStackTrace();
		}
	}
}
