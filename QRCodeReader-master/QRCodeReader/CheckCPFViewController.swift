//
//  CheckCPFViewController.swift
//  QRCodeReader
//
//  Created by Victor Leal Porto de Almeida Arruda on 05/11/17.
//  Copyright © 2017 AppCoda. All rights reserved.
//

import UIKit

class CheckCPFCiewController: UIViewController {
    


    @IBOutlet weak var input: UITextField!
     @IBOutlet weak var messageLabel: UILabel!
    
    var id : String!
    var CPF = ""
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        link(id: id)

        // Do any additional setup after loading the view.
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    func link(id: String){
        var request = URLRequest(url: URL(string: "http://10.0.98.33/tags/" + id + "/checkout")!)
        
        request.httpMethod = "GET"
        let task = URLSession.shared.dataTask(with: request) {
            data, response, error in
            
            // Check for error
            if error != nil
            {
                print("error=\(String(describing: error))")
                return
            }
            
            // Print out response string
            let responseString = NSString(data: data!, encoding: String.Encoding.utf8.rawValue)
            print("responseString = \(String(describing: responseString))")
            
            // Convert server json response to NSDictionary
            do {
                if let convertedJsonIntoDict = try JSONSerialization.jsonObject(with: data!, options: []) as? NSDictionary {
                    
                    // Print out dictionary
                    print(convertedJsonIntoDict)
                    
                    // Get value by key
                    let cpf = convertedJsonIntoDict["cpf"] as? String
                    self.CPF = cpf!
                    print(cpf!)
                }
            } catch let error as NSError {
                print(error.localizedDescription)
            }
            
        }
        
        task.resume()
    }
    
    
    
    @IBAction func checkCPF(_ sender: Any) {
        if input.text != ""{
            print(input.text! + " " + CPF)
            if input.text == CPF{
                messageLabel.text = "Liberado"
            }
        }
    }
    
    
}
